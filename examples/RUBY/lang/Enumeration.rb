class Enumeration
  def Enumeration.add_item(key,value)
    @hash ||= {}
    @hash[key]=value
  end

  def Enumeration.const_missing(key)
    @hash[key]
  end   

  def Enumeration.each
    @hash.each {|key,value| yield(key,value)}
  end

  def Enumeration.values
    @hash.values || []
  end

  def Enumeration.keys
    @hash.keys || []
  end

  def Enumeration.[](key)
    @hash[key]
  end
end